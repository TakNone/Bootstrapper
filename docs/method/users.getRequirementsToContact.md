# users.getRequirementsToContact

**Description** : *Check whether we can write to the specified users, used to implement bulk checks for Premium\-only messages &raquo; and paid messages &raquo;*

**Layer** : 218

```tl
users.getRequirementsToContact#d89a83a3 id:Vector<InputUser> = Vector<RequirementToContact>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`Vector<InputUser>`](type/InputUser) | Users to check |

---

## Result

[Vector<RequirementToContact>](type/RequirementToContact)

---

## Example

```php
$requirementToContact = $client->users->getRequirementsToContact(
	id : array($client->get_input_user(user : '@TakNone')),
);
```