# account.updateColor

**Description** : *Update the accent color and background custom emoji &raquo; of the current account*

**Layer** : 218

```tl
account.updateColor#684d214e flags:# for_profile:flags.1?true color:flags.2?PeerColor = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **for_profile** | [`flags.1?true`](type/true) | Whether to change the accent color emoji pattern of the profile page; otherwise, the accent color and emoji pattern of messages will be changed |
| **color** | [`flags.2?PeerColor`](type/PeerColor) | ID of the accent color palette » to use (not RGB24, see here » for more info) |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **COLOR_INVALID** | `400` | The specified color palette ID was invalid |
| **DOCUMENT_INVALID** | `400` | The specified document is invalid |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |

---

## Example

```php
$bool = $client->account->updateColor(
	for_profile : true,
	color : $client->peerColor(
		color : 58,
		background_emoji_id : -5249224526987493752,
	),
);
```