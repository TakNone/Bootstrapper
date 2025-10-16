# bankCardOpenUrl

**Description** : *Credit card info URL provided by the bank*

**Layer** : 216

```tl
bankCardOpenUrl#f568028a url:string name:string = BankCardOpenUrl;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>url</mark> | [`string`](type/string) | Info URL |
| <mark>name</mark> | [`string`](type/string) | Bank name |

---

## Type

[BankCardOpenUrl](type/BankCardOpenUrl)

---

## Example

```php
$bankCardOpenUrl = $client->bankCardOpenUrl(
	url : 'https://docs.liveproto.dev',
	name : 'J1e2zRKxwunspqOm',
);
```