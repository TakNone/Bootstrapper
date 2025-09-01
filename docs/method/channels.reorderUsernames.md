# channels.reorderUsernames

**Description** : *Reorder active usernames*

**Layer** : 214

```tl
channels.reorderUsernames#b45ced1d channel:InputChannel order:Vector<string> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | The supergroup or channel |
| <mark>order</mark> | [`Vector<string>`](type/string) | The new order for active usernames. All active usernames must be specified |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |

---

## Example

```php
$bool = $client->channels->reorderUsernames(
	channel : $client->inputChannelEmpty(),
	order : array('tzCnogqZLsajpA5X'),
);
```