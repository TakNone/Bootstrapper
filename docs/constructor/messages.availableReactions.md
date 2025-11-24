# messages.availableReactions

**Description** : *Animations and metadata associated with message reactions &raquo;*

**Layer** : 218

```tl
messages.availableReactions#768e3aad hash:int reactions:Vector<AvailableReaction> = messages.AvailableReactions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`int`](type/int) | Hash used for caching, for more info click here |
| <mark>reactions</mark> | [`Vector<AvailableReaction>`](type/AvailableReaction) | Animations and metadata associated with message reactions » |

---

## Type

[messages.AvailableReactions](type/messages.AvailableReactions)

---

## Example

```php
$messagesAvailableReactions = $client->messages->availableReactions(
	hash : 0,
	reactions : array(
		$client->availableReaction(
			inactive : true,
			premium : true,
			reaction : 'yNXhKdgBki1xMs0v',
			title : 'PoIdKWc9LVuZsrbe',
			static_icon : $client->documentEmpty(
				id : -6363149393079083912,
			),
			appear_animation : $client->documentEmpty(
				id : -3400394470744285751,
			),
			select_animation : $client->documentEmpty(
				id : -6220263245339700737,
			),
			activate_animation : $client->documentEmpty(
				id : 8493534090111302699,
			),
			effect_animation : $client->documentEmpty(
				id : -6906495407539541087,
			),
			around_animation : $client->documentEmpty(
				id : 4996062805237912430,
			),
			center_icon : $client->documentEmpty(
				id : -8543988115640101731,
			),
		),
	),
);
```