# messages.setDefaultReaction

**Description** : *Change default emoji reaction to use in the quick reaction menu: the value is synced across devices and can be fetched using help.getConfig, reactions_default field*

**Layer** : 211

```tl
messages.setDefaultReaction#4f47a016 reaction:Reaction = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>reaction</mark> | [`Reaction`](type/Reaction) | New emoji reaction |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **REACTION_INVALID** | `400` | The specified reaction is invalid |

---

## Example

```php
$bool = $client->messages->setDefaultReaction(
	reaction : $client->reactionEmpty(),
);
```