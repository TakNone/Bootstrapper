# messages.createForumTopic

**Layer** : 218

```tl
messages.createForumTopic#2f98c3d5 flags:# title_missing:flags.4?true peer:InputPeer title:string icon_color:flags.0?int icon_emoji_id:flags.3?long random_id:long send_as:flags.2?InputPeer = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
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
	title : 'areIPmiq9RsnEA4d',
	icon_color : 91,
	icon_emoji_id : 6826535199188566680,
	random_id : -4198636520571592292,
	send_as : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```