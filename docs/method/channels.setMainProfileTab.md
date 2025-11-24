# channels.setMainProfileTab

**Description** : *Changes the main profile tab of a channel, see here &raquo; for more info*

**Layer** : 218

```tl
channels.setMainProfileTab#3583fcb1 channel:InputChannel tab:ProfileTab = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | The channel |
| <mark>tab</mark> | [`ProfileTab`](type/ProfileTab) | The tab to set as main tab |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |

---

## Example

```php
$bool = $client->channels->setMainProfileTab(
	channel : $client->get_input_channel(channel : '@LiveProto'),
	tab : $client->profileTabPosts(),
);
```