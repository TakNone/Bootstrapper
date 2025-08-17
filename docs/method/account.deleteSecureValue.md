# account.deleteSecureValue

**Description** : *Delete stored Telegram Passport documents, for more info see the passport docs »*

**Layer** : 211

```tl
account.deleteSecureValue#b880bc4b types:Vector<SecureValueType> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>types</mark> | [`Vector<SecureValueType>`](type/SecureValueType) | Document types to delete |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->account->deleteSecureValue(
	types : array(
		$client->secureValueTypePersonalDetails(),
		$client->secureValueTypePassport(),
		$client->secureValueTypeDriverLicense(),
		$client->secureValueTypeIdentityCard(),
		$client->secureValueTypeInternalPassport(),
		$client->secureValueTypeAddress(),
		$client->secureValueTypeUtilityBill(),
		$client->secureValueTypeBankStatement(),
		$client->secureValueTypeRentalAgreement(),
		$client->secureValueTypePassportRegistration(),
		$client->secureValueTypeTemporaryRegistration(),
		$client->secureValueTypePhone(),
		$client->secureValueTypeEmail(),
	),
);
```