# account.getSecureValue

**Description** : *Get saved Telegram Passport document, for more info see the passport docs »*

**Layer** : 211

```tl
account.getSecureValue#73665bc2 types:Vector<SecureValueType> = Vector<SecureValue>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>types</mark> | [`Vector<SecureValueType>`](type/SecureValueType) | Requested value types |

---

## Result

[Vector<SecureValue>](type/SecureValue)

---

## Example

```php
$secureValue = $client->account->getSecureValue(
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