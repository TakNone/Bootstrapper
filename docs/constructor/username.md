# username

**Description** : *Contains information about a username*

**Layer** : 211

```tl
username#b4073647 flags:# editable:flags.0?true active:flags.1?true username:string = Username;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **editable** | [`flags.0?true`](type/true) | Whether the username is editable, meaning it wasn't bought on fragment |
| **active** | [`flags.1?true`](type/true) | Whether the username is active |
| <mark>username</mark> | [`string`](type/string) | The username |

---

## Type

[Username](type/Username)

---

## Example

```php
$username = $client->username(
	editable : true,
	active : true,
	username : 'TakNone',
);
```