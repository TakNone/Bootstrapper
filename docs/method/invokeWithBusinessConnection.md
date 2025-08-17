# invokeWithBusinessConnection

**Description** : *Invoke a method using a Telegram Business Bot connection, see here » for more info, including a list of the methods that can be wrapped in this constructor*

**Layer** : 211

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
	connection_id : 'CWYO1vdwtDjS92RJ',
	query : $client->X(),
);
```