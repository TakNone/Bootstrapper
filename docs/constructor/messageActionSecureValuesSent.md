# messageActionSecureValuesSent

**Description** : *Request for secure telegram passport values was sent*

**Layer** : 211

```tl
messageActionSecureValuesSent#d95c6154 types:Vector<SecureValueType> = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>types</mark> | [`Vector<SecureValueType>`](type/SecureValueType) | Secure value types |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionSecureValuesSent(
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