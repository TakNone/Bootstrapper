# contacts.resolvedPeer

**Description** : *Resolved peer*

**Layer** : 218

```tl
contacts.resolvedPeer#7f077ad9 peer:Peer chats:Vector<Chat> users:Vector<User> = contacts.ResolvedPeer;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[contacts.ResolvedPeer](type/contacts.ResolvedPeer)

---

## Example

```php
$contactsResolvedPeer = $client->contacts->resolvedPeer(
	peer : $client->peerUser(
		user_id : 5382379516711877855,
	),
	chats : array(
		$client->chatEmpty(
			id : 4656716906247610440,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7731132941853824874,
			title : 'u70l2QqxoD1NymH6',
			photo : $client->chatPhotoEmpty(),
			participants_count : 60,
			date : 9,
			version : 13,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
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
				until_date : 51,
			),
		),
		$client->chatForbidden(
			id : 4473309728129600456,
			title : 'Wp6PG1Th3aAc0EZz',
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
			id : -1042796548863765663,
			access_hash : 4867954146455782335,
			title : 'DOPz7EsMj6QVLnKC',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 89,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'oq1hU4FBsL2bKgMJ',
					reason : 'NGcQH2BmR8XKpEqL',
					text : 'QWxPkLD0odS3rYbc',
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
				until_date : 62,
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
				until_date : 15,
			),
			participants_count : 84,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 27,
			),
			color : $client->peerColor(
				color : 27,
				background_emoji_id : 954976456272257158,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : -4539360823780951722,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 71,
			subscription_until_date : 30,
			bot_verification_icon : -5431102438036966368,
			send_paid_messages_stars : -7380283820143474426,
			linked_monoforum_id : 2192460475121836161,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 3372239362485038566,
			access_hash : -8676310900970701540,
			title : '2HBzrZaF5T3ocCjS',
			until_date : 100,
		),
	),
	users : array(
		$client->userEmpty(
			id : 3972209701390563568,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			id : -1697662147880510286,
			access_hash : -5322634543190593424,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 76,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'iH9wJWmKse36rN5q',
					reason : 'crwTZ4p2tiHaL3EO',
					text : 'QVkt9Ybhmye4Igud',
				),
			),
			bot_inline_placeholder : 'ZBI84RQEvNxmTGP5',
			lang_code : 'axPcv4QORFHmi23V',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 10,
			),
			color : $client->peerColor(
				color : 38,
				background_emoji_id : 4287927939225122657,
			),
			profile_color : $client->peerColor(
				color : 2,
				background_emoji_id : -5871213386878507293,
			),
			bot_active_users : 74,
			bot_verification_icon : 9136473312949348737,
			send_paid_messages_stars : -2399300402646555363,
		),
	),
);
```