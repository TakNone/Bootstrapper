# exportedNoPaidMessagesToken

**Layer** : 233

```tl
exportedNoPaidMessagesToken#695dd042 flags:# token:string url:string expires:flags.0?int = ExportedNoPaidMessagesToken;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>token</mark> | [`string`](type/string) | NOTHING |
| <mark>url</mark> | [`string`](type/string) | NOTHING |
| **expires** | [`flags.0?int`](type/int) | NOTHING |

---

## Type

[ExportedNoPaidMessagesToken](type/ExportedNoPaidMessagesToken)

---

## Example

```php
$exportedNoPaidMessagesToken = $client->exportedNoPaidMessagesToken(
	token : 'oVzJqmsRipbTDkPE',
	url : 'https://docs.liveproto.dev',
	expires : 20,
);
```