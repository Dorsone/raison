<template>
    <div class="w-[50%] m-auto mt-40 grid grid-cols-6 gap-4">
        <fwb-input
            placeholder="enter your search query"
            size="lg"
            class="col-start-1 col-end-3"
        >
            <template #prefix>
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                     stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linecap="round"
                          stroke-linejoin="round" stroke-width="2"/>
                </svg>
            </template>
            <template #suffix>
                <fwb-button>Search</fwb-button>
            </template>
        </fwb-input>

        <fwb-button-group class="col-end-8 col-span-2">
            <fwb-button size="xs" color="default">ALL</fwb-button>
            <fwb-button size="xs" color="alternative">USD</fwb-button>
            <fwb-button size="xs" color="alternative">EUR</fwb-button>
            <fwb-button size="xs" color="alternative">RUB</fwb-button>
        </fwb-button-group>

        <fwb-table hoverable class="col-start-1 col-end-8">
            <fwb-table-head>
                <fwb-table-head-cell>Магазин</fwb-table-head-cell>
                <fwb-table-head-cell>Дата</fwb-table-head-cell>
                <fwb-table-head-cell>Сумма</fwb-table-head-cell>
                <fwb-table-head-cell>Документ</fwb-table-head-cell>
                <fwb-table-head-cell>
                    <span class="sr-only">Действие</span>
                </fwb-table-head-cell>
            </fwb-table-head>
            <fwb-table-body>
                <fwb-table-row>
                    <fwb-table-cell>Apple MacBook Pro 17"</fwb-table-cell>
                    <fwb-table-cell>Sliver</fwb-table-cell>
                    <fwb-table-cell>Laptop</fwb-table-cell>
                    <fwb-table-cell>$2999</fwb-table-cell>
                    <fwb-table-cell>
                        <fwb-button size="sm" color="green" class="mr-2">Edit</fwb-button>
                        <fwb-button size="sm" color="red">Delete</fwb-button>
                    </fwb-table-cell>
                </fwb-table-row>
                <fwb-table-row>
                    <fwb-table-cell>Microsoft Surface Pro</fwb-table-cell>
                    <fwb-table-cell>White</fwb-table-cell>
                    <fwb-table-cell>Laptop PC</fwb-table-cell>
                    <fwb-table-cell>$1999</fwb-table-cell>
                    <fwb-table-cell>
                        <fwb-button size="sm" color="green" class="mr-2">Edit</fwb-button>
                        <fwb-button size="sm" color="red">Delete</fwb-button>
                    </fwb-table-cell>
                </fwb-table-row>
                <fwb-table-row>
                    <fwb-table-cell>Magic Mouse 2</fwb-table-cell>
                    <fwb-table-cell>Black</fwb-table-cell>
                    <fwb-table-cell>Accessories</fwb-table-cell>
                    <fwb-table-cell>$99</fwb-table-cell>
                    <fwb-table-cell>
                        <fwb-button size="sm" color="green" class="mr-2">Edit</fwb-button>
                        <fwb-button size="sm" color="red">Delete</fwb-button>
                    </fwb-table-cell>
                </fwb-table-row>
            </fwb-table-body>
        </fwb-table>
    </div>
</template>

<script setup>
import {
    FwbTable,
    FwbTableBody,
    FwbTableCell,
    FwbTableHead,
    FwbTableHeadCell,
    FwbTableRow,
    FwbButton,
    FwbInput,
    FwbButtonGroup,
} from 'flowbite-vue'
</script>
