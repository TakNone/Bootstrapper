# inputBotInlineMessageID

**Description** : *Represents a sent inline message from the perspective of a bot \(legacy constructor\)*

**Layer** : 211

```tl
inputBotInlineMessageID#890c3d89 dc_id:int id:long access_hash:long = InputBotInlineMessageID;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>dc_id</mark> | [`int`](type/int) | DC ID to use when working with this inline message |
| <mark>id</mark> | [`long`](type/long) | ID of message, contains both the (32-bit, legacy) owner ID and the message ID, used only for Bot API backwards compatibility with 32-bit user ID |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash of message |

---

## Type

[InputBotInlineMessageID](type/InputBotInlineMessageID)

---

## Example

```php
$inputBotInlineMessageID = $client->inputBotInlineMessageID(
	dc_id : 32,
	id : 7905537241151244926,
	access_hash : 8356278502927293552,
);
```