# messages.createForumTopic

**Layer** : 218

```tl
messages.createForumTopic#2f98c3d5 flags:# title_missing:flags.4?true peer:InputPeer title:string icon_color:flags.0?int icon_emoji_id:flags.3?long random_id:long send_as:flags.2?InputPeer = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **title_missing** | [`flags.4?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>title</mark> | [`string`](type/string) | NOTHING |
| **icon_color** | [`flags.0?int`](type/int) | NOTHING |
| **icon_emoji_id** | [`flags.3?long`](type/long) | NOTHING |
| <mark>random_id</mark> | [`long`](type/long) | NOTHING |
| **send_as** | [`flags.2?InputPeer`](type/InputPeer) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->createForumTopic(
	title_missing : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	title : 'fXz1monGIreK27p4',
	icon_color : 11,
	icon_emoji_id : 8498775291265597520,
	random_id : 2313856934516284927,
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```