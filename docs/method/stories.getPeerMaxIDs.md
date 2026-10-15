# stories.getPeerMaxIDs

**Description** : *Get compact active story summaries &raquo; for a set of peers*

**Layer** : 229

```tl
stories.getPeerMaxIDs#78499170 id:Vector<InputPeer> = Vector<RecentStory>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`Vector<InputPeer>`](type/InputPeer) | Peers whose active story summaries » should be fetched |

---

## Result

[Vector<RecentStory>](type/RecentStory)

---

## Example

```php
$recentStory = $client->stories->getPeerMaxIDs(
	id : array($client->get_input_peer(peer : '@LiveProtoChat')),
);
```