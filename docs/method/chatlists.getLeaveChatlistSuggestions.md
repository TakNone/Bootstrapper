# chatlists.getLeaveChatlistSuggestions

**Description** : *Returns identifiers of pinned or always included chats from a chat folder imported using a chat folder deep link », which are suggested to be left when the chat folder is deleted*

**Layer** : 211

```tl
chatlists.getLeaveChatlistSuggestions#fdbcd714 chatlist:InputChatlist = Vector<Peer>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chatlist</mark> | [`InputChatlist`](type/InputChatlist) | Folder ID |

---

## Result

[Vector<Peer>](type/Peer)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **FILTER_ID_INVALID** | `400` | The specified filter ID is invalid |
| **FILTER_NOT_SUPPORTED** | `400` | The specified filter cannot be used in this context |

---

## Example

```php
$peer = $client->chatlists->getLeaveChatlistSuggestions(
	chatlist : $client->inputChatlistDialogFilter(
		filter_id : 20,
	),
);
```