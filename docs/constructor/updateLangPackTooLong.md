# updateLangPackTooLong

**Description** : *A language pack has changed, the client should manually fetch the changed strings using langpack\.getDifference*

**Layer** : 211

```tl
updateLangPackTooLong#46560264 lang_code:string = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>lang_code</mark> | [`string`](type/string) | Language code |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateLangPackTooLong(
	lang_code : 'cgiqsr4BJ5kzMaUe',
);
```