# help.dismissSuggestion

**Description** : *Dismiss a suggestion, see here for more info &raquo;*

**Layer** : 216

```tl
help.dismissSuggestion#f50dbaa1 peer:InputPeer suggestion:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | In the case of pending suggestions in channels, the channel ID |
| <mark>suggestion</mark> | [`string`](type/string) | Suggestion, see here for more info » |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->help->dismissSuggestion(
	peer : $client->inputPeerEmpty(),
	suggestion : '9iysE5TNAhqw6PeS',
);
```