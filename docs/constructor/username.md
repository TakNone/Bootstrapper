# username

**Description** : *Contains information about a username*

**Layer** : 233

```tl
username#b4073647 flags:# editable:flags.0?true active:flags.1?true deletable:flags.2?true expired:flags.3?true username:string = Username;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **editable** | [`flags.0?true`](type/true) | Whether the username is editable, meaning it wasn't bought on fragment |
| **active** | [`flags.1?true`](type/true) | Whether the username is active |
| **deletable** | [`flags.2?true`](type/true) | NOTHING |
| **expired** | [`flags.3?true`](type/true) | NOTHING |
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
	deletable : true,
	expired : true,
	username : 'TakNone',
);
```