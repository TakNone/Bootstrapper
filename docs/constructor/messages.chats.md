# messages.chats

**Description** : *List of chats with auxiliary data*

**Layer** : 218

```tl
messages.chats#64ff9fd5 chats:Vector<Chat> = messages.Chats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats |

---

## Type

[messages.Chats](type/messages.Chats)

---

## Example

```php
$messagesChats = $client->messages->chats(
	chats : array(
		$client->chatEmpty(
			id : 2669551342365667372,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7638819037918495866,
			title : '4OIuDQ37EWiHthRC',
			photo : $client->chatPhotoEmpty(),
			participants_count : 31,
			date : 78,
			version : 26,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 10,
			),
		),
		$client->chatForbidden(
			id : -4661937292347507411,
			title : 'DMQOvAEWj1BK8oz0',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : 988353990188966799,
			access_hash : 504201189602930137,
			title : 'I3qZsgptkPYbB7Vf',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 16,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'k4hyxEGQceov2gZP',
					reason : 'NcTeOzBYbkQSntJ0',
					text : 'rvOMhQ9u6Hplto1F',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 64,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 59,
			),
			participants_count : 59,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 36,
			),
			color : $client->peerColor(
				color : 47,
				background_emoji_id : -8553738065106172599,
			),
			profile_color : $client->peerColor(
				color : 85,
				background_emoji_id : -6358858116994396164,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 2,
			subscription_until_date : 1,
			bot_verification_icon : 9105248820197188221,
			send_paid_messages_stars : -2659028211743489627,
			linked_monoforum_id : -1374303690795817650,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 8719946569631104016,
			access_hash : -7269483171331214152,
			title : 'KaVy59ZJ8I4Ydgfv',
			until_date : 80,
		),
	),
);
```