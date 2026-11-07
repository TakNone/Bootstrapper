# inputTonConnectOauthSession

**Layer** : 233

```tl
inputTonConnectOauthSession#629f66ce session_id:long challenge_answer:bytes body:bytes proof:WalletOwnershipProof = InputTonConnectOauthSession;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>session_id</mark> | [`long`](type/long) | NOTHING |
| <mark>challenge_answer</mark> | [`bytes`](type/bytes) | NOTHING |
| <mark>body</mark> | [`bytes`](type/bytes) | NOTHING |
| <mark>proof</mark> | [`WalletOwnershipProof`](type/WalletOwnershipProof) | NOTHING |

---

## Type

[InputTonConnectOauthSession](type/InputTonConnectOauthSession)

---

## Example

```php
$inputTonConnectOauthSession = $client->inputTonConnectOauthSession(
	session_id : 202262317255606151,
	challenge_answer : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	body : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	proof : $client->walletOwnershipProof(
		timestamp : 89,
		signature : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
);
```