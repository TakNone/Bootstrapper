# inputShareThemeGift

**Layer** : 233

```tl
inputShareThemeGift#3fb92b5b stargift:InputSavedStarGift = ShareTheme;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stargift</mark> | [`InputSavedStarGift`](type/InputSavedStarGift) | NOTHING |

---

## Type

[ShareTheme](type/ShareTheme)

---

## Example

```php
$shareTheme = $client->inputShareThemeGift(
	stargift : $client->inputSavedStarGiftUser(
		msg_id : 98,
	),
);
```