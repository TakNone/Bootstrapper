# messages.setChatTheme

**Description** : *Change the chat theme of a certain chat*

**Layer** : 211

```tl
messages.setChatTheme#e63be13f peer:InputPeer emoticon:string = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Private chat where to change theme |
| <mark>emoticon</mark> | [`string`](type/string) | Emoji, identifying a specific chat theme; a list of chat themes can be fetched using account.getChatThemes |

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
	peer : $client->inputPeerEmpty(),
	emoticon : 'AbO5LQsXVgIWziqv',
);
```