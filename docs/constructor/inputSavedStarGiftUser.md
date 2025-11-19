# inputSavedStarGiftUser

**Description** : *A gift received in a private chat with another user*

**Layer** : 218

```tl
inputSavedStarGiftUser#69279795 msg_id:int = InputSavedStarGift;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>msg_id</mark> | [`int`](type/int) | ID of the messageService with the messageActionStarGift with the gift |

---

## Type

[InputSavedStarGift](type/InputSavedStarGift)

---

## Example

```php
$inputSavedStarGift = $client->inputSavedStarGiftUser(
	msg_id : 37,
);
```