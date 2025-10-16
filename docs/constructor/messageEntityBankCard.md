# messageEntityBankCard

**Description** : *Indicates a credit card number*

**Layer** : 216

```tl
messageEntityBankCard#761e6af4 offset:int length:int = MessageEntity;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>offset</mark> | [`int`](type/int) | Offset of message entity within message (in UTF-16 code units) |
| <mark>length</mark> | [`int`](type/int) | Length of message entity within message (in UTF-16 code units) |

---

## Type

[MessageEntity](type/MessageEntity)

---

## Example

```php
$messageEntity = $client->messageEntityBankCard(
	offset : 0,
	length : 52,
);
```