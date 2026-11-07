# messages.setShareTheme

**Layer** : 233

```tl
messages.setShareTheme#698a9b1a peer:InputPeer theme:ShareTheme = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>theme</mark> | [`ShareTheme`](type/ShareTheme) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->messages->setShareTheme(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	theme : $client->shareThemeDefault(),
);
```