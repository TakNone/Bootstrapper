# inputAppEvent

**Description** : *Event that occurred in the application*

**Layer** : 211

```tl
inputAppEvent#1d1b1245 time:double type:string peer:long data:JSONValue = InputAppEvent;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>time</mark> | [`double`](type/double) | Client's exact timestamp for the event |
| <mark>type</mark> | [`string`](type/string) | Type of event |
| <mark>peer</mark> | [`long`](type/long) | Arbitrary numeric value for more convenient selection of certain event types, or events referring to a certain object |
| <mark>data</mark> | [`JSONValue`](type/JSONValue) | Details of the event |

---

## Type

[InputAppEvent](type/InputAppEvent)

---

## Example

```php
$inputAppEvent = $client->inputAppEvent(
	time : -1627511.744140625,
	type : 'DxKp1vJiGUl0mou2',
	peer : 7925611207684601978,
	data : $client->jsonNull(),
);
```