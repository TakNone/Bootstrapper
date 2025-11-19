# exportedContactToken

**Description** : *Describes a temporary profile link*

**Layer** : 218

```tl
exportedContactToken#41bf109b url:string expires:int = ExportedContactToken;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | The temporary profile link |
| <mark>expires</mark> | [`int`](type/int) | Its expiration date |

---

## Type

[ExportedContactToken](type/ExportedContactToken)

---

## Example

```php
$exportedContactToken = $client->exportedContactToken(
	url : 'https://docs.liveproto.dev',
	expires : 30,
);
```