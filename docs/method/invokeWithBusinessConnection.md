# invokeWithBusinessConnection

**Description** : *Invoke a method using a Telegram Business Bot connection, see here &raquo; for more info, including a list of the methods that can be wrapped in this constructor*

**Layer** : 214

```tl
invokeWithBusinessConnection#dd289f8e {X:Type} connection_id:string query:!X = X;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>connection_id</mark> | [`string`](type/string) | Business connection ID |
| <mark>query</mark> | [`!X`](type/X) | The actual query |

---

## Result

[X](type/X)

---

## Example

```php
$x = $client->invokeWithBusinessConnection(
	connection_id : 'p1WsfxXV9yI63wAe',
	query : $client->help->getConfig(raw : true),
);
```