# messages.setChatTheme

**Description** : *Change the chat theme of a certain chat, see here &raquo; for more info*

**Layer** : 218

```tl
messages.setChatTheme#81202c9 peer:InputPeer theme:InputChatTheme = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Private chat where to change theme |
| <mark>theme</mark> | [`InputChatTheme`](type/InputChatTheme) | The theme to set |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **EMOJI_INVALID** | `400` | The specified theme emoji is valid |
| **EMOJI_NOT_MODIFIED** | `400` | The theme wasn't changed |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$updates = $client->messages->setChatTheme(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	theme : $client->inputChatThemeEmpty(),
);
```