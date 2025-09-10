# inputAppEvent

**Description** : *Event that occurred in the application*

**Layer** : 214

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
	time : -582872.412109375,
	type : 'k4HlneB7jcKF2CtZ',
	peer : 6148835436218378460,
	data : $client->jsonNull(),
);
```