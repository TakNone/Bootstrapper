# stories.getPeerMaxIDs

**Description** : *Get the IDs of the maximum read stories for a set of peers*

**Layer** : 222

```tl
stories.getPeerMaxIDs#78499170 id:Vector<InputPeer> = Vector<RecentStory>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`Vector<InputPeer>`](type/InputPeer) | Peers |

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