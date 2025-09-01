# messages.getUniqueStarGiftValueInfo

**Layer** : 214

```tl
messages.getUniqueStarGiftValueInfo#4365af6b slug:string = UniqueStarGiftValueInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>slug</mark> | [`string`](type/string) | NOTHING |

---

## Result

[UniqueStarGiftValueInfo](type/UniqueStarGiftValueInfo)

---

## Example

```php
$uniqueStarGiftValueInfo = $client->messages->getUniqueStarGiftValueInfo(
	slug : 'gomal4qGTf3iHB69',
);
```