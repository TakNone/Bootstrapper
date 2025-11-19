# contacts.sponsoredPeers

**Description** : *Sponsored peers*

**Layer** : 218

```tl
contacts.sponsoredPeers#eb032884 peers:Vector<SponsoredPeer> chats:Vector<Chat> users:Vector<User> = contacts.SponsoredPeers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peers</mark> | [`Vector<SponsoredPeer>`](type/SponsoredPeer) | Sponsored peers |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Info about sponsored chats and channels |
| <mark>users</mark> | [`Vector<User>`](type/User) | Info about sponsored users |

---

## Type

[contacts.SponsoredPeers](type/contacts.SponsoredPeers)

---

## Example

```php
$contactsSponsoredPeers = $client->contacts->sponsoredPeers(
	peers : array(
		$client->sponsoredPeer(
			random_id : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			peer : $client->peerUser(
				user_id : 7255978228463303948,
			),
			sponsor_info : 'bBt8LH3Xl0IuDFdG',
			additional_info : 'q5gyz17us4kJ8XBS',
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -5486992519267631358,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 9014331714927659354,
			title : 'haXGxpj92ZrIFyuD',
			photo : $client->chatPhotoEmpty(),
			participants_count : 99,
			date : 73,
			version : 98,
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
				until_date : 72,
			),
		),
		$client->chatForbidden(
			id : -6910926660506951292,
			title : 'Jv71Tq5oSL2UzdEA',
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
			id : -3865546036193510919,
			access_hash : 4685705005171110463,
			title : 'S3osMjHnmR6KwceD',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 93,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'G8z5DN1nVSc0lqKM',
					reason : 'C5wBsr9ohipEUI8l',
					text : 'UNbyKixDBLQ1eYq7',
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
				until_date : 34,
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
				until_date : 13,
			),
			participants_count : 18,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 37,
			),
			color : $client->peerColor(
				color : 47,
				background_emoji_id : -119526785421043660,
			),
			profile_color : $client->peerColor(
				color : 26,
				background_emoji_id : 8038362486649420626,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 1,
			subscription_until_date : 71,
			bot_verification_icon : 3981044436316838464,
			send_paid_messages_stars : -2897905005101158799,
			linked_monoforum_id : -973192744904072231,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -7300716613265626320,
			access_hash : -3430412361517394080,
			title : '9NRjWqUKB1zkGblD',
			until_date : 71,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8099724905943317985,
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
			id : -1486434578992426598,
			access_hash : -6146026804371496645,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 56,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '5SiVRN1eujbMxclW',
					reason : 'lA3emGscSwCEDOaB',
					text : 'Q3Leuo1ISlUwXkMf',
				),
			),
			bot_inline_placeholder : 'DTm1NysAYeiEXtka',
			lang_code : 'TsUESZacOujCGVn5',
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
				max_id : 63,
			),
			color : $client->peerColor(
				color : 43,
				background_emoji_id : 7728717124814923751,
			),
			profile_color : $client->peerColor(
				color : 94,
				background_emoji_id : -5955496504942585752,
			),
			bot_active_users : 61,
			bot_verification_icon : 5802548269762271639,
			send_paid_messages_stars : -6211030911108064377,
		),
	),
);
```