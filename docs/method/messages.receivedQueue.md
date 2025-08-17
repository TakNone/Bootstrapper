# messages.receivedQueue

**Description** : *Confirms receipt of messages in a secret chat by client, cancels push notifications.
The method returns a list of random_ids of messages for which push notifications were cancelled*

**Layer** : 211

```tl
messages.receivedQueue#55a5bb66 max_qts:int = Vector<long>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>max_qts</mark> | [`int`](type/int) | Maximum qts value available at the client |

---

## Result

[Vector<long>](type/long)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MAX_QTS_INVALID** | `400` | The specified max_qts is invalid |
| **MSG_WAIT_FAILED** | `500` | A waiting call returned an error |

---

## Example

```php
$long = $client->messages->receivedQueue(
	max_qts : 70,
);
```