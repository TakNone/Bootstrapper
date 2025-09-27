# messages.availableReactions

**Description** : *Animations and metadata associated with message reactions &raquo;*

**Layer** : 214

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
			reaction : 'PpU3B1WyLGol6xNa',
			title : 'hp47lI6YgF2rKGvQ',
			static_icon : $client->documentEmpty(
				id : -8314405406267610501,
			),
			appear_animation : $client->documentEmpty(
				id : -7233808274433966237,
			),
			select_animation : $client->documentEmpty(
				id : -4581326266630420695,
			),
			activate_animation : $client->documentEmpty(
				id : 5710994538880294590,
			),
			effect_animation : $client->documentEmpty(
				id : 3698589032717779003,
			),
			around_animation : $client->documentEmpty(
				id : -8149187800568036782,
			),
			center_icon : $client->documentEmpty(
				id : -6272097012420132727,
			),
		),
	),
);
```