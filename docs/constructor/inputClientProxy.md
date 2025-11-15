# inputClientProxy

**Description** : *Info about an MTProxy used to connect*

**Layer** : 216

```tl
inputClientProxy#75588b3f address:string port:int = InputClientProxy;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>address</mark> | [`string`](type/string) | Proxy address |
| <mark>port</mark> | [`int`](type/int) | Proxy port |

---

## Type

[InputClientProxy](type/InputClientProxy)

---

## Example

```php
$inputClientProxy = $client->inputClientProxy(
	address : '3Ul1PO6Mu9Qd5JBX',
	port : 99,
);
```