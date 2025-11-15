# RequirementToContact

**Description** : *Specifies a requirement that must be satisfied in order to contact a user*

**Layer** : 216

```tl
requirementToContactEmpty#50a9839 = RequirementToContact;
requirementToContactPremium#e581e4e9 = RequirementToContact;
requirementToContactPaidMessages#b4f67e93 stars_amount:long = RequirementToContact;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**requirementToContactEmpty**](constructor/requirementToContactEmpty) | This user can be freely contacted |
| [**requirementToContactPremium**](constructor/requirementToContactPremium) | This user requires us to buy a Premium subscription in order to contact them |
| [**requirementToContactPaidMessages**](constructor/requirementToContactPaidMessages) | This user requires us to pay the specified amount of Telegram Stars to send them a message, see here » for the full flow |