# messages.checkUrlAuthMatchCode

**Layer** : 225

```tl
messages.checkUrlAuthMatchCode#c9a47b0b url:string match_code:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | NOTHING |
| <mark>match_code</mark> | [`string`](type/string) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->messages->checkUrlAuthMatchCode(
	url : 'https://docs.liveproto.dev',
	match_code : 'BIvWSEqPex2R74lL',
);
```