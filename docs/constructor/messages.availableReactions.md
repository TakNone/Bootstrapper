# messages.availableReactions

**Description** : *Animations and metadata associated with message reactions &raquo;*

**Layer** : 225

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
			reaction : 'lKsg90hj4pv3CTyU',
			title : 'I3al2XEbkmKi49LD',
			static_icon : $client->documentEmpty(
				id : 3715983930654240168,
			),
			appear_animation : $client->documentEmpty(
				id : -8780031636048269633,
			),
			select_animation : $client->documentEmpty(
				id : -1746896712136751221,
			),
			activate_animation : $client->documentEmpty(
				id : 1671010637996336374,
			),
			effect_animation : $client->documentEmpty(
				id : 3967326852271017800,
			),
			around_animation : $client->documentEmpty(
				id : -1505196799670638676,
			),
			center_icon : $client->documentEmpty(
				id : 2563386336954099356,
			),
		),
	),
);
```