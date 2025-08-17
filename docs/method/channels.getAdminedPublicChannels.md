# channels.getAdminedPublicChannels

**Description** : *Get channels/supergroups/geogroups we're admin in. Usually called when the user exceeds the limit for owned public channels/supergroups/geogroups, and the user is given the choice to remove one of his channels/supergroups/geogroups*

**Layer** : 211

```tl
channels.getAdminedPublicChannels#f8b036af flags:# by_location:flags.0?true check_limit:flags.1?true for_personal:flags.2?true = messages.Chats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **by_location** | [`flags.0?true`](type/true) | Get geogroups |
| **check_limit** | [`flags.1?true`](type/true) | If set and the user has reached the limit of owned public channels/supergroups/geogroups, instead of returning the channel list one of the specified errors will be returned.Useful to check if a new public channel can indeed be created, even before asking the user to enter a channel username to use in channels.checkUsername/channels.updateUsername |
| **for_personal** | [`flags.2?true`](type/true) | Set this flag to only fetch the full list of channels that may be passed to account.updatePersonalChannel to display them on our profile page |

---

## Result

[messages.Chats](type/messages.Chats)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNELS_ADMIN_LOCATED_TOO_MUCH** | `400` | The user has reached the limit of public geogroups |
| **CHANNELS_ADMIN_PUBLIC_TOO_MUCH** | `400` | You're admin of too many public channels, make some channels private to change the username of this channel |

---

## Example

```php
$messagesChats = $client->channels->getAdminedPublicChannels(
	by_location : true,
	check_limit : true,
	for_personal : true,
);
```