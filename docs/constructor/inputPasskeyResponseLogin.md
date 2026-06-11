# inputPasskeyResponseLogin

**Layer** : 227

```tl
inputPasskeyResponseLogin#c31fc14a client_data:DataJSON authenticator_data:bytes signature:bytes user_handle:string = InputPasskeyResponse;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>client_data</mark> | [`DataJSON`](type/DataJSON) | NOTHING |
| <mark>authenticator_data</mark> | [`bytes`](type/bytes) | NOTHING |
| <mark>signature</mark> | [`bytes`](type/bytes) | NOTHING |
| <mark>user_handle</mark> | [`string`](type/string) | NOTHING |

---

## Type

[InputPasskeyResponse](type/InputPasskeyResponse)

---

## Example

```php
$inputPasskeyResponse = $client->inputPasskeyResponseLogin(
	client_data : $client->dataJSON(
		data : 'xDOEuFI1bzcZB8sm',
	),
	authenticator_data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	signature : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	user_handle : 'Z82H4EBAquN13lho',
);
```