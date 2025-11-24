# messages.updateSavedReactionTag

**Description** : *Update the description of a saved message tag &raquo;*

**Layer** : 218

```tl
messages.updateSavedReactionTag#60297dec flags:# reaction:Reaction title:flags.0?string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>reaction</mark> | [`Reaction`](type/Reaction) | Reaction associated to the tag |
| **title** | [`flags.0?string`](type/string) | Tag description, max 12 UTF-8 characters; to remove the description call the method without setting this flag |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PREMIUM_ACCOUNT_REQUIRED** | `403` | A premium account is required to execute this action |
| **REACTION_INVALID** | `400` | The specified reaction is invalid |

---

## Example

```php
$bool = $client->messages->updateSavedReactionTag(
	reaction : $client->reactionEmpty(),
	title : 'JXVigf27Sn83LjuQ',
);
```