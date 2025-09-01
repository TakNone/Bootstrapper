# contacts.importCard

**Description** : *Returns general information on a user using his previously exported card as input\.The app may use it to open a conversation without knowing the user&#039;s phone number*

**Layer** : 214

```tl
contacts.importCard#4fe196fe export_card:Vector<int> = User;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>export_card</mark> | [`Vector<int>`](type/int) | Result of contacts.exportCard |

---

## Result

[User](type/User)

---

## Example

```php
$user = $client->contacts->importCard(
	export_card : array(45),
);
```