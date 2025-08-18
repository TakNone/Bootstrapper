# postInteractionCountersMessage

**Description** : *Interaction counters for a message*

**Layer** : 211

```tl
postInteractionCountersMessage#e7058e7f msg_id:int views:int forwards:int reactions:int = PostInteractionCounters;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID |
| <mark>views</mark> | [`int`](type/int) | Number of views |
| <mark>forwards</mark> | [`int`](type/int) | Number of forwards to public channels |
| <mark>reactions</mark> | [`int`](type/int) | Number of reactions |

---

## Type

[PostInteractionCounters](type/PostInteractionCounters)

---

## Example

```php
$postInteractionCounters = $client->postInteractionCountersMessage(
	msg_id : 7,
	views : 48,
	forwards : 5,
	reactions : 72,
);
```