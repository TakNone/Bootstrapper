# contacts.blocked

**Description** : *Full list of blocked users*

**Layer** : 214

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
				user_id : 2536243377129655733,
			),
			date : 44,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -5470581582276035700,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -2289781272531287901,
			title : 'CWYSZXQirJMGRg1f',
			photo : $client->chatPhotoEmpty(),
			participants_count : 58,
			date : 90,
			version : 10,
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
				until_date : 43,
			),
		),
		$client->chatForbidden(
			id : 2724598549793001094,
			title : 'v2dsVEbMw0469gfR',
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
			id : -4692223094413913566,
			access_hash : -570575731157194170,
			title : 'nT3Apb1rHPKwUSDv',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 84,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'S6bnOAspxVahXMQD',
					reason : 'LMQTpVcJZdX3AyI7',
					text : 'Ez0Q7sNlR3pcT2PJ',
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
				until_date : 14,
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
				until_date : 49,
			),
			participants_count : 38,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 41,
			color : $client->peerColor(
				color : 22,
				background_emoji_id : -3458074409931707455,
			),
			profile_color : $client->peerColor(
				color : 49,
				background_emoji_id : -5143666239076775211,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 75,
			subscription_until_date : 29,
			bot_verification_icon : 1477290214120023084,
			send_paid_messages_stars : 9043521897593148708,
			linked_monoforum_id : 6373480390399381058,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -5757336672525112400,
			access_hash : -3708237931029684860,
			title : '3VFbgwCLqXDNZPJ5',
			until_date : 2,
		),
	),
	users : array(
		$client->userEmpty(
			id : -296153444943091441,
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
			id : -8936618910384737017,
			access_hash : 2529081738868241799,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 37,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'j6i0G5S1DtQEfI9Y',
					reason : '2EZbAhYN49ogat8v',
					text : 'tC65S8QgePmlXsoE',
				),
			),
			bot_inline_placeholder : 'mIKwgz4ua5jpGxr6',
			lang_code : 'Kl1nG9XCUcQauxHe',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 82,
			color : $client->peerColor(
				color : 52,
				background_emoji_id : 9028697894969787044,
			),
			profile_color : $client->peerColor(
				color : 74,
				background_emoji_id : 2735629369576437139,
			),
			bot_active_users : 53,
			bot_verification_icon : -3181735343070299478,
			send_paid_messages_stars : -5020935881393698405,
		),
	),
);
```