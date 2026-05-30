# contacts.blockedSlice

**Description** : *Incomplete list of blocked users*

**Layer** : 222

```tl
contacts.blockedSlice#e1664194 count:int blocked:Vector<PeerBlocked> chats:Vector<Chat> users:Vector<User> = contacts.Blocked;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of elements in the list |
| <mark>blocked</mark> | [`Vector<PeerBlocked>`](type/PeerBlocked) | List of blocked users |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Blocked chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users |

---

## Type

[contacts.Blocked](type/contacts.Blocked)

---

## Example

```php
$contactsBlocked = $client->contacts->blockedSlice(
	count : 84,
	blocked : array(
		$client->peerBlocked(
			peer_id : $client->peerUser(
				user_id : -5102041865731810309,
			),
			date : 29,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 7122391442835010857,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 332658412660838601,
			title : 'Zore1byHAEwaiMfx',
			photo : $client->chatPhotoEmpty(),
			participants_count : 23,
			date : 52,
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
				until_date : 19,
			),
		),
		$client->chatForbidden(
			id : 2703327839288662648,
			title : '6bXCu8tlvwc4gZxR',
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
			id : 2257165655144197927,
			access_hash : 5546225521452318538,
			title : 'o9U1HdhIXtsQ25c3',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 20,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'M1vznyUQoiEwR07Y',
					reason : 'SkqcitIwvTzJmlbx',
					text : 'gnJehZ4wx2GcHQuo',
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
				until_date : 21,
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
				until_date : 75,
			),
			participants_count : 90,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 33,
			),
			color : $client->peerColor(
				color : 16,
				background_emoji_id : -658435195334866067,
			),
			profile_color : $client->peerColor(
				color : 80,
				background_emoji_id : -2433616186109663089,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 36,
			subscription_until_date : 85,
			bot_verification_icon : -1308024880553145150,
			send_paid_messages_stars : -2389483699142330007,
			linked_monoforum_id : 6609438427341245074,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -6952936939696264460,
			access_hash : 8684771212839860827,
			title : 'Ut2j40CnW53rGvlJ',
			until_date : 42,
		),
	),
	users : array(
		$client->userEmpty(
			id : 3638660963506969527,
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
			bot_forum_can_manage_topics : true,
			id : -240335172961214928,
			access_hash : -3099286643956409402,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 64,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'pzhQ98T0Y7ScmarM',
					reason : '39xm8zEKuPh0b5Ys',
					text : '8UK5qoLz631BiwJ2',
				),
			),
			bot_inline_placeholder : 'hOZNYfvD70gQ1wPE',
			lang_code : 'jR8aFXmOxKiwcBgN',
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
				max_id : 24,
			),
			color : $client->peerColor(
				color : 30,
				background_emoji_id : -7016094673086341765,
			),
			profile_color : $client->peerColor(
				color : 43,
				background_emoji_id : 3345887504543607527,
			),
			bot_active_users : 83,
			bot_verification_icon : -5067689496294645346,
			send_paid_messages_stars : 4456889015354412779,
		),
	),
);
```