# channels.setStickers

**Description** : *Associate a stickerset to the supergroup*

**Layer** : 211

```tl
channels.setStickers#ea8ca4f9 channel:InputChannel stickerset:InputStickerSet = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Supergroup |
| <mark>stickerset</mark> | [`InputStickerSet`](type/InputStickerSet) | The stickerset to associate |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **PARTICIPANTS_TOO_FEW** | `400` | Not enough participants |
| **STICKERSET_OWNER_ANONYMOUS** | `406` | Provided stickerset can't be installed as group stickerset to prevent admin deanonymization |

---

## Example

```php
$bool = $client->channels->setStickers(
	channel : $client->inputChannelEmpty(),
	stickerset : $client->inputStickerSetEmpty(),
);
```