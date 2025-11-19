# chatlists.joinChatlistUpdates

**Description** : *Join channels and supergroups recently added to a chat folder deep link &raquo;*

**Layer** : 218

```tl
chatlists.joinChatlistUpdates#e089f8f5 chatlist:InputChatlist peers:Vector<InputPeer> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chatlist</mark> | [`InputChatlist`](type/InputChatlist) | The folder |
| <mark>peers</mark> | [`Vector<InputPeer>`](type/InputPeer) | List of new chats to join, fetched using chatlists.getChatlistUpdates and filtered as specified in the documentation » |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **FILTER_ID_INVALID** | `400` | The specified filter ID is invalid |
| **FILTER_INCLUDE_EMPTY** | `400` | The include_peers vector of the filter is empty |

---

## Example

```php
$updates = $client->chatlists->joinChatlistUpdates(
	chatlist : $client->inputChatlistDialogFilter(
		filter_id : 10,
	),
	peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
);
```