# wallet.proofChallenge

**Layer** : 233

```tl
wallet.proofChallenge#99e41707 payload:string expires:int domain:string = wallet.ProofChallenge;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>payload</mark> | [`string`](type/string) | NOTHING |
| <mark>expires</mark> | [`int`](type/int) | NOTHING |
| <mark>domain</mark> | [`string`](type/string) | NOTHING |

---

## Type

[wallet.ProofChallenge](type/wallet.ProofChallenge)

---

## Example

```php
$walletProofChallenge = $client->wallet->proofChallenge(
	payload : 'nWsM1xizPQ7u0DJV',
	expires : 72,
	domain : 'v3NY0ZMsuztfidy7',
);
```