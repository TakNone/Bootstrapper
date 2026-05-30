# inputPasskeyResponseLogin

**Layer** : 222

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
		data : 'UBDey68uz2mp1Joj',
	),
	authenticator_data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	signature : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	user_handle : 'Ejfu9OYpHTPZi3xW',
);
```