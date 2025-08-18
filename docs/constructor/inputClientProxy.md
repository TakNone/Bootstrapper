# inputClientProxy

**Description** : *Info about an MTProxy used to connect*

**Layer** : 211

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
	address : 'XCNyZld3brsq01kH',
	port : 94,
);
```