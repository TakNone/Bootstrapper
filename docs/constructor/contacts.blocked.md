# contacts.blocked

**Description** : *Full list of blocked users*

**Layer** : 216

```tl
contacts.blocked#ade1591 blocked:Vector<PeerBlocked> chats:Vector<Chat> users:Vector<User> = contacts.Blocked;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>blocked</mark> | [`Vector<PeerBlocked>`](type/PeerBlocked) | List of blocked users |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Blocked chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users |

---

## Type

[contacts.Blocked](type/contacts.Blocked)

---

## Example

```php
$contactsBlocked = $client->contacts->blocked(
	blocked : array(
		$client->peerBlocked(
			peer_id : $client->peerUser(
				user_id : 1786464097745160263,
			),
			date : 68,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 58645258575675285,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2465399509502456286,
			title : 'oKxQfyMrXWOUL4mN',
			photo : $client->chatPhotoEmpty(),
			participants_count : 67,
			date : 46,
			version : 59,
			migrated_to : $client->inputChannelEmpty(),
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
				until_date : 40,
			),
		),
		$client->chatForbidden(
			id : -6218512892431349310,
			title : 'mC9NRvhDcfSOQoXz',
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
			id : 3758538264538892117,
			access_hash : 6781180532099726708,
			title : 'gMJT8lc04bK2Pzvf',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 4,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'cZAJHEOazYokXFqW',
					reason : 'AUFegfhIqN4cYdDu',
					text : 'eFSr0641BmuCzkxa',
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
				until_date : 6,
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
				until_date : 94,
			),
			participants_count : 87,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 28,
			color : $client->peerColor(
				color : 78,
				background_emoji_id : -492185431985837694,
			),
			profile_color : $client->peerColor(
				color : 63,
				background_emoji_id : -135134901512426279,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 11,
			subscription_until_date : 92,
			bot_verification_icon : 8449232940563588791,
			send_paid_messages_stars : 4817810390367625857,
			linked_monoforum_id : 5611799061156796900,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -1632207460869039601,
			access_hash : 1930336142620851097,
			title : 'xhLB29KIMRNFuoyA',
			until_date : 72,
		),
	),
	users : array(
		$client->userEmpty(
			id : -7726329051402662141,
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
			id : 6192342246047993051,
			access_hash : 1222427759484640500,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 18,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'mHThGiACLgX29JdS',
					reason : 'XzZAyGTqkSV8QYHd',
					text : 'VXbQgneNwhPdOzqU',
				),
			),
			bot_inline_placeholder : 'kIi9qoSaCXLO6dlH',
			lang_code : 'XMEPiLZb9yTpH62m',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 57,
			color : $client->peerColor(
				color : 41,
				background_emoji_id : -1948718906394857135,
			),
			profile_color : $client->peerColor(
				color : 30,
				background_emoji_id : -247608743774010044,
			),
			bot_active_users : 22,
			bot_verification_icon : 5850257588461661768,
			send_paid_messages_stars : 461171678331358224,
		),
	),
);
```